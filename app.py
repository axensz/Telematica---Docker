from flask import Flask, render_template

app=Flask(__name__,template_folder='templates')

@app.route('/')
def index():
    return render_template('index.php')

@app.route('/registro/')
def registro():
    return render_template('registro.php')

@app.route('/iniciosesion/')
def login():
    return render_template('login.php')

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80, debug=True)