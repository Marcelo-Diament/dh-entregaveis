import React from "react";

class Botao extends React.Component {
    render() {
        return (
            <button onClick={this.props.onClick}>
                {this.props.title}
            </button>
        )
    }
}

export default Botao;