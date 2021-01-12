import requests
#Texto para enviar ao servidor
envio = 'item 2#4453.75'
#URL de destino
url = 'https://eventsync.portaltecsinapse.com.br/public/recrutamento/finalizar?email=vitorfelix37@gmail.com'
#Especificação do tipo de dado a ser enviado
headers = {'content-type': 'text/plain'}
#Chamada do método post, passando por parâmetro o destino, header e dado.
resposta = requests.post(url, headers=headers, data=envio)

print(resposta.text)
