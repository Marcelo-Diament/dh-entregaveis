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

  onChange(e){
    this.setState({
      input: e.target.value
    })
  }

  onClick(){
    const novoArray = [
      ...this.state.lista,
      this.state.input
    ];
    this.setState({
      lista: novoArray
    })
  }



  render() {
    return (
      <div>
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h1 className="App-title">React II - Props e Life Cycle</h1>
        </header>

        <section class="toDoList">
          <article>
            <ol list-style="1">
            {
              this.state.lista.map(item =>
                <li>
                  {item}
                </li>
              )
            }
            </ol>
          </article>

          <article class="adicionar">
            <Input onChange={this.onChange.bind(this)}/>
            <Botao title="Adicionar To Do" onClick={this.onClick.bind(this)}/>
          </article>

        </section>

      </div>
    );
  }
}

export default App;
