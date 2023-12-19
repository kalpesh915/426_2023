import React from "react";

class PureComponent1 extends React.PureComponent{
    constructor(){
        super();

        this.state = {
            ip1 : 0
        }
    }

    render(){
        console.log("Render Called "+ this.state.ip1);
        return <>
            <h1>Example of Pure Component</h1>
            <h1>{this.state.ip1}</h1>
            <button onClick={()=>this.setState({ip1: Math.ceil(Math.random() * 10)})}>Update</button>
        </>
    }
}

export default PureComponent1;