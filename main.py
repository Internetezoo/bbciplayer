import requests
import webbrowser

def get_public_ip():
    try:
        # Lekérjük a külső IP címet egy API segítségével
        response = requests.get('https://api.ipify.org?format=json')
        ip_data = response.json()
        return ip_data['ip']
    except Exception as e:
        return f"Hiba az IP lekérésekor: {e}"

def open_bbc_link():
    url = "https://www.bbc.co.uk/iplayer/episode/b0873q2l/jonathan-creek-daemons-roost"
    print(f"Betöltés: {url}")
    
    # Megnyitja az alapértelmezett böngészőben (helyi futtatásnál működik)
    webbrowser.open(url)

if __name__ == "__main__":
    current_ip = get_public_ip()
    print(f"A jelenlegi IP címed: {current_ip}")
    
    open_bbc_link()
