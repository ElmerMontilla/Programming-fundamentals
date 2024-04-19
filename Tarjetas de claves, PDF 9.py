import random

# Generar los 40 números aleatorios y guardarlos
def generar_numeros():
    numeros = []
    for _ in range(40):
        numero = str(random.randint(0, 9999)).zfill(4)
        numeros.append(numero)
    return numeros

# Programa principal
numeros_guardados = generar_numeros()

# Crear otro programa para validar un número introducido aleatoriamente
def validar_numero(numero_introducido):
    if numero_introducido in numeros_guardados:
        return "El número es válido!"
    else:
        return "El número es inválido!"

# Solicitar un número al usuario de manera aleatoria
numero_aleatorio = random.choice(numeros_guardados)
numero_introducido = input(f"Entre el número {numero_aleatorio}? ")

# Validar el número introducido
resultado = validar_numero(numero_introducido)
print(resultado)
