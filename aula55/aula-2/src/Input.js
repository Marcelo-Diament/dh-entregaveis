import React from "react";

class Input extends React.Component {
    constructor(){
        super()
    }
    render() {
        return (
            <input onChange={this.props.onChange}/>
        )
    }
}

export default Input;