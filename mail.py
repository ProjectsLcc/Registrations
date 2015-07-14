import sys
import time
# Import smtplib for the actual sending function
import smtplib
import datetime

# For guessing MIME type
import mimetypes

# Import the email modules we'll need
import email
import email.mime.application

username = "lccregister1@gmail.com"
password = "lccsjce1234"

to = sys.argv[1]

try:
#       block to mail
# Create a text/plain message
	msg = email.mime.Multipart.MIMEMultipart()
	msg['Subject'] = "LCC registration"
	msg['From'] = username
	msg['To'] = to
	body = email.mime.Text.MIMEText("Hello, This mail is to confirm your registration. Thanks for joining.")
	msg.attach(body)

# PDF attachment


# send via Gmail server
# NOTE: my ISP, Centurylink, seems to be automatically rewriting
# port 25 packets to be port 587 and it is trashing port 587 packets.
# So, I use the default port 25, but I authenticate. 
	s = smtplib.SMTP('smtp.gmail.com')
#	s.starttls()
#	s = smtplib.SMTP('smtp.gmail.com:587')
	s.starttls()
#	print "smtplib"
	print "logging in:"
	s.login(username, password)
	print "logged in"
	s.sendmail(username,[to], msg.as_string())
	print "sent"
	s.quit()
except:
       print "Sorry, couldn't mail, try again."
