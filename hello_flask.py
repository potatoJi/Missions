from flask import Flask

app=Flask('my_web_app')

@app.route('/')
def hello():
    return '<h1>Hello Flask</h1>'

@app.route('/sayhello')
def say_hello():
    return 'Say hello'

@app.route('/sayhelloto/<name>')
def say_hello_to(name):
    return 'Hello,' + name


app.run()
