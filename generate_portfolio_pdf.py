import os
from fpdf import FPDF
from fpdf.enums import XPos, YPos
from datetime import datetime
from bs4 import BeautifulSoup

# --- CONFIGURATION ---
PROJECT_FILES = [
    'projets/projet_detail1.php',
    'projets/projet_detail2.php',
    'projets/projet_detail3.php',
    'projets/projet_detail4.php',
    'projets/projet_detail5.php',
]
VEILLE_FILE = 'veille.php'
OUTPUT_PDF = 'Portfolio_BTS_SIO.pdf'

# --- POLICE UNICODE POUR FPDF ---
UNICODE_FONT_PATH = 'assets/fonts/dejavu-fonts-ttf-2.37/dejavu-fonts-ttf-2.37/ttf/DejaVuSans.ttf'
UNICODE_FONT_NAME = 'DejaVu'

# --- HELPERS ---
def clean_html(raw_html):
    soup = BeautifulSoup(raw_html, 'html.parser')
    return soup.get_text(separator='\n', strip=True)

def extract_project_info(filepath):
    with open(filepath, 'r', encoding='utf-8') as f:
        html = f.read()
    soup = BeautifulSoup(html, 'html.parser')
    title = soup.find(['h2', 'title'])
    title = title.get_text(strip=True) if title else 'Projet'
    desc = ''
    desc_tag = soup.find(lambda tag: tag.name in ['h3', 'h4'] and 'Description succincte' in tag.text)
    if desc_tag:
        p = desc_tag.find_next('p')
        if p:
            desc = p.get_text(strip=True)
    date_lieu = ''
    date_tag = soup.find(lambda tag: tag.name in ['h4', 'li'] and ('Date' in tag.text or 'Période' in tag.text))
    if date_tag:
        ul = date_tag.find_next('ul')
        if ul:
            date_lieu = clean_html(str(ul))
        else:
            date_lieu = clean_html(date_tag.text)
    avec_qui = ''
    qui_tag = soup.find(lambda tag: tag.name in ['h4', 'li'] and ('Avec qui' in tag.text))
    if qui_tag:
        ul = qui_tag.find_next('ul')
        if ul:
            avec_qui = clean_html(str(ul))
        else:
            avec_qui = clean_html(qui_tag.text)
    contexte = ''
    contexte_tag = soup.find(lambda tag: tag.name in ['h3', 'h4'] and 'Contexte' in tag.text)
    if contexte_tag:
        p = contexte_tag.find_next('p')
        if p:
            contexte = p.get_text(strip=True)
    env_tech = ''
    env_tag = soup.find(lambda tag: tag.name in ['h4', 'li'] and ('Environnement technique' in tag.text or 'Technologies' in tag.text))
    if env_tag:
        ul = env_tag.find_next('ul')
        if ul:
            env_tech = clean_html(str(ul))
        else:
            env_tech = clean_html(env_tag.text)
    # Images
    img_list = []
    for img in soup.find_all('img'):
        src = img.get('src')
        if src and (src.endswith('.jpg') or src.endswith('.png')):
            img_list.append(src.replace('..', '.'))
    return {
        'title': title,
        'desc': desc,
        'date_lieu': date_lieu,
        'avec_qui': avec_qui,
        'contexte': contexte,
        'env_tech': env_tech,
        'images': img_list
    }

def extract_veille_info(filepath):
    with open(filepath, 'r', encoding='utf-8') as f:
        html = f.read()
    soup = BeautifulSoup(html, 'html.parser')
    sections = []
    # Titre principal
    main_title = soup.find('h2')
    if main_title:
        sections.append({'title': main_title.get_text(strip=True), 'body': ''})
    # Sous-sections
    for h3 in soup.find_all('h3'):
        section = {'title': h3.get_text(strip=True), 'body': ''}
        # Cherche la liste ou le paragraphe associé
        next_elem = h3.find_next_sibling()
        texts = []
        while next_elem and next_elem.name not in ['h2', 'h3']:
            texts.append(clean_html(str(next_elem)))
            next_elem = next_elem.find_next_sibling()
        section['body'] = '\n'.join([t for t in texts if t.strip()])
        sections.append(section)
    return sections

# --- PDF GENERATION ---
class PortfolioPDF(FPDF):
    def header(self):
        if self.page_no() == 1:
            return
        self.set_font(UNICODE_FONT_NAME, '', 12)
        self.cell(0, 10, 'Portfolio BTS SIO - Nathan Chevrollier', 0, new_x=XPos.LMARGIN, new_y=YPos.NEXT, align='C')
        self.ln(2)
    def footer(self):
        self.set_y(-15)
        self.set_font(UNICODE_FONT_NAME, '', 10)
        self.cell(0, 10, f'Page {self.page_no()}', 0, new_x=XPos.RIGHT, new_y=YPos.TOP, align='C')
    def add_project(self, info):
        self.add_page()
        self.set_font(UNICODE_FONT_NAME, 'B', 16)
        self.cell(0, 10, info['title'], 0, new_x=XPos.LMARGIN, new_y=YPos.NEXT)
        self.set_font(UNICODE_FONT_NAME, '', 12)
        if info['desc']:
            self.multi_cell(0, 8, info['desc'])
            self.ln(2)
        if info['date_lieu']:
            self.set_font(UNICODE_FONT_NAME, 'B', 12)
            self.cell(0, 8, 'Date et lieu', 0, new_x=XPos.LMARGIN, new_y=YPos.NEXT)
            self.set_font(UNICODE_FONT_NAME, '', 12)
            self.multi_cell(0, 7, info['date_lieu'])
            self.ln(2)
        if info['avec_qui']:
            self.set_font(UNICODE_FONT_NAME, 'B', 12)
            self.cell(0, 8, 'Avec qui', 0, new_x=XPos.LMARGIN, new_y=YPos.NEXT)
            self.set_font(UNICODE_FONT_NAME, '', 12)
            self.multi_cell(0, 7, info['avec_qui'])
            self.ln(2)
        if info['contexte']:
            self.set_font(UNICODE_FONT_NAME, 'B', 12)
            self.cell(0, 8, 'Contexte', 0, new_x=XPos.LMARGIN, new_y=YPos.NEXT)
            self.set_font(UNICODE_FONT_NAME, '', 12)
            self.multi_cell(0, 7, info['contexte'])
            self.ln(2)
        if info['env_tech']:
            self.set_font(UNICODE_FONT_NAME, 'B', 12)
            self.cell(0, 8, 'Environnement technique', 0, new_x=XPos.LMARGIN, new_y=YPos.NEXT)
            self.set_font(UNICODE_FONT_NAME, '', 12)
            self.multi_cell(0, 7, info['env_tech'])
            self.ln(2)
        # Images
        for img in info['images']:
            img_path = img.replace('../', '')
            if os.path.exists(img_path):
                self.image(img_path, w=120)
                self.ln(2)
    def add_veille(self, sections):
        self.add_page()
        self.set_font(UNICODE_FONT_NAME, 'B', 18)
        self.cell(0, 15, 'Veille technologique', 0, new_x=XPos.LMARGIN, new_y=YPos.NEXT, align='C')
        for section in sections:
            self.set_font(UNICODE_FONT_NAME, 'B', 14)
            self.cell(0, 10, section['title'], 0, new_x=XPos.LMARGIN, new_y=YPos.NEXT)
            self.set_font(UNICODE_FONT_NAME, '', 12)
            self.multi_cell(0, 8, section['body'])
            self.ln(2)

# --- MAIN GENERATION ---
def main():
    pdf = PortfolioPDF()
    pdf.add_font(UNICODE_FONT_NAME, '', UNICODE_FONT_PATH)
    pdf.add_font(UNICODE_FONT_NAME, 'B', UNICODE_FONT_PATH)
    pdf.add_font(UNICODE_FONT_NAME, 'I', UNICODE_FONT_PATH)
    pdf.add_font(UNICODE_FONT_NAME, 'BI', UNICODE_FONT_PATH)
    pdf.set_auto_page_break(auto=True, margin=15)
    # Page de garde
    pdf.add_page()
    pdf.set_font(UNICODE_FONT_NAME, 'B', 24)
    pdf.cell(0, 30, 'Portfolio BTS SIO', 0, new_x=XPos.LMARGIN, new_y=YPos.NEXT, align='C')
    pdf.set_font(UNICODE_FONT_NAME, '', 16)
    pdf.cell(0, 15, 'Nathan Chevrollier', 0, new_x=XPos.LMARGIN, new_y=YPos.NEXT, align='C')
    pdf.cell(0, 10, f'Année scolaire {datetime.now().year}', 0, new_x=XPos.LMARGIN, new_y=YPos.NEXT, align='C')
    pdf.ln(30)
    pdf.set_font(UNICODE_FONT_NAME, 'I', 12)
    pdf.cell(0, 10, 'Document généré automatiquement - à compléter pour les attestations et la synthèse', 0, new_x=XPos.LMARGIN, new_y=YPos.NEXT, align='C')
    # Synthèse
    pdf.add_page()
    pdf.set_font(UNICODE_FONT_NAME, 'B', 18)
    pdf.cell(0, 15, 'Tableau de synthèse', 0, new_x=XPos.LMARGIN, new_y=YPos.NEXT, align='C')
    pdf.set_font(UNICODE_FONT_NAME, 'I', 12)
    pdf.multi_cell(0, 10, 'Insérer ici le tableau de synthèse (à compléter manuellement).')
    # Attestations
    pdf.add_page()
    pdf.set_font(UNICODE_FONT_NAME, 'B', 18)
    pdf.cell(0, 15, 'Attestations', 0, new_x=XPos.LMARGIN, new_y=YPos.NEXT, align='C')
    pdf.set_font(UNICODE_FONT_NAME, 'I', 12)
    pdf.multi_cell(0, 10, 'Insérer ici les attestations de stage ou de travail (à compléter manuellement).')
    # Projets
    pdf.add_page()
    pdf.set_font(UNICODE_FONT_NAME, 'B', 18)
    pdf.cell(0, 15, 'Projets', 0, new_x=XPos.LMARGIN, new_y=YPos.NEXT, align='C')
    pdf.ln(5)
    for proj_file in PROJECT_FILES:
        info = extract_project_info(proj_file)
        pdf.add_project(info)
    # Veille technologique
    veille_sections = extract_veille_info(VEILLE_FILE)
    pdf.add_veille(veille_sections)
    pdf.output(OUTPUT_PDF)
    print(f'PDF généré : {OUTPUT_PDF}')

if __name__ == '__main__':
    main()
