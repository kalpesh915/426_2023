import React from "react";
class PureComponent1 extends React.PureComponentk{
    constructor(){
        super();

        this.state = {
            x : 1
        }
    }

    render(){
        console.log("Render Function Called");
        return <>
            <h1>Example of Pure Component</h1>
            <h1>{this.state.x}</h1>
            {/* <button onClick={()=>this.setState({x: this.state.x + 1})}>Click me</button> */}
            <button onClick={()=>this.setState({x: this.state.x})}>Click me</button>
        </>
    }
}

export default PureComponent1;