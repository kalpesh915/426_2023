import React from "react";

class Demo3 extends React.Component{
    constructor(){
        super();
        this.state = {
            x : 100
        }
    }

    render(){
        return <>
            <h1>Example of State with Class Component</h1>
            <h1>{this.state.x}</h1>
            <button onClick={()=>{this.setState({x : this.state.x + 1})}}>Update</button>
        </>
    }
}

export default Demo3;