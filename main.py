from flask import Flask
import requests
import os

app = Flask(__name__)

@app.route('/')
def home():
    # IP lekérése
    try:
        ip = requests.get('https://api.ipify.org').text
    except:
        ip = "Nem sikerült lekérni"
    
    return f"<h1>Szia!</h1><p>A szerver IP címe: {ip}</p><p><a href='https://www.bbc.co.uk/iplayer/episode/b0873q2l/jonathan-creek-daemons-roost'>BBC Link</a></p>"

if __name__ == "__main__":
    # A Northflank a PORT környezeti változót használja
    port = int(os.environ.get("PORT", 8080))
    app.run(host='0.0.0.0', port=port)
