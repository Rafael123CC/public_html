import requests
import shutil
import os

def download_image(url, save_path):
    # Faz a requisição para o URL da imagem
    response = requests.get(url, stream=True)
    if response.status_code == 200:
        # Abre o arquivo em modo de escrita em bytes
        with open(save_path, 'wb') as f:
            # Copia o conteúdo do response para o arquivo local
            response.raw.decode_content = True
            shutil.copyfileobj(response.raw, f)
        print("Download concluído!")
    else:
        print("Falha ao baixar a imagem.")

# URL da imagem do Google
google_image_url = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png"

# Pasta onde você deseja salvar a imagem
save_folder = "imagens"

# Cria a pasta se ela não existir
if not os.path.exists(save_folder):
    os.makedirs(save_folder)

# Extrai o nome do arquivo da URL
file_name = os.path.basename(google_image_url)

# Caminho completo onde a imagem será salva
save_path = os.path.join(save_folder, file_name)

# Faz o download da imagem
download_image(google_image_url, save_path)
