import React from 'react';

class App extends React.Component {

  constructor(){
    super();

    this.state = {
      first: 0,
      second: 0
    }
  }

  armazena(event) {
    const valor = event.target.value;
    const nome = event.target.name;

    this.setState({
        [nome]: valor,
    });
  }

  soma(){
    const resultado = parseInt(this.state.first) + parseInt(this.state.second);

    this.setState({
      resultado
    });
  }

  render() {
    return (
      <div>
        <input type="number" name="first" onChange={this.armazena.bind(this)} />
        <input type="number" name="second" onChange={this.armazena.bind(this)} />
        <button onClick={this.soma.bind(this)}>
          Calcular
        </button>
        {
          this.state.resultado && `O resultado é ${this.state.resultado}`
        }
      </div>
    )
  }

}

export default App;