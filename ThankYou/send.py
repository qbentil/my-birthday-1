import pywhatkit as kit


# kit.sendwhatmsg("+233541014239", "I Testing Python Brdfffffoadcast!", 15,11)

names = ['Alex', 'Kelvin', 'Ricky']
phones = ['+233******', '+233********', '+233*******']
dictionary = dict(zip(names, phones))

for name, phone in dictionary.items():
    kit.sendwhatmsg(phone, "Hello "+name+" I am testing from my python Code. Relax hahahahahah", 15,22)


# sendwhatmsg() takes 4 parameters
# 1. Reciepient phone number with country code
# 2. Message 
# 3. Time in hours (It makes use of the 24 hour)
# 4. Time in Minutes



# HINT: THE FOR LOOP DOESN'T WORK AS IT SHOULD FOR NOW