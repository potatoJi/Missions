from flask import Flask
from flask import render_template
from flask import request
from flask import make_response

app = Flask('my_app')

@app.route('/')
def hello():
	username = request.cookies.get('username')
	if not username:
		return render_template('index.html')
	else:
		return 'Hello, ' + username


@app.route('/login',methods=['GET','POST'])
def login():
	if request.method == 'POST':
		username = request.form['username']
		password = request.form['password']
		if username == password:
			resp = make_response(render_template('hello.html',name=username))
			resp.set_cookie('username',username)
			return resp
	return render_template('login.html')


app.run()

