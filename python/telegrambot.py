import telebot
import config

bot = telebot.TeleBot("5380290735:AAHxj8h9CcVVyIG3i9sMDDLLikOMzLw0Ras", parse_mode=None)

@bot.message_handler(content_types=['text'])
def send_echo(message):
	#bot.reply_to(message, message.text)
    bot.send_message(message.chat.id, message.text)

bot.infinity_polling(none_stop = True)