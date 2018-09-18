import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import Input from './Input.js';
import Botao from './Botao.js';

class App extends Component {
  constructor(){
    super()
    this.state = {
      lista: [],
      input: ''
    }
  }

  componentDidMount(){
    fetch('http://localhost:8000/api/listTasks/')
    .then(resposta => resposta.json())
      .then((resposta) => {
        this.setState({
          lista:resposta
        })
      })
  }

salvarTexto(event){
  this.setState({
    input: event.target.value
  })
}

salvarNaLista() {

  fetch('http://localhost:8000/api/addTask/', {
    headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json'
    },
    method: 'POST',
    body: JSON.stringify({
      tarefa: this.state.input,
    })
  })
  .then(res => {
      fetch('http://localhost:8000/api/listTasks/')
      .then(resposta => resposta.json())
      .then((resposta) => {
        this.setState({
          lista: resposta
        })
    })
  })
}

marcarComoFeito(id){
  fetch('http://localhost:8000/api/updateTask/' + id)

  .then(res => {
      fetch('http://localhost:8000/api/listTasks/')
      .then(resposta => resposta.json())
      .then((resposta) => {
        this.setState({
          lista: resposta
        })
    })
  })
}


  onChange(e){
    this.setState({
      input: e.target.value
    })
  }

  // onClick(){
  //   const novoArray = [
  //     ...this.state.lista,
  //     this.state.input
  //   ];
  //   this.setState({
  //     lista: novoArray
  //   })
  // }







  render() {
    console.log(this.state)
    return (
      <div>
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h1 className="App-title">React II - Props e Life Cycle</h1>
        </header>

        <section className="toDoList">
          <article>
            <ol list-style="1">
            {
              this.state.lista.map(item =>
                <li>
                  {item.text} | status: {item.status}
                  <Botao title="Marcar como feito" onClick={this.marcarComoFeito.bind(this, item.id)}/>
                </li>

              )
            }
            </ol>
          </article>

          <article className="adicionar">
            <Input onChange={this.onChange.bind(this)}/>
            <Botao title="Adicionar To Do" onClick={this.salvarNaLista.bind(this)}/>
          </article>

        </section>

      </div>
    );
  }
}

export default App;
