import React from "react";

class LifeCycle1 extends React.Component{
    constructor(){
        super();
        console.log("Constructor Called");

        this.state = {
            x : 0
        }
    }

    render(){
        console.log("Render Called");
        return <>
            <h1>Life Cycle Example</h1>
            <h1>value of x is {this.state.x}</h1>
            <button onClick={()=>{this.setState({x : this.state.x + 1})}}>Update</button>
        </>
    }

    componentDidMount(){
        console.log("Component Did Mount Called");
    }

    componentDidUpdate(){
        console.log("Component Did Update Called");
    }

    shouldComponentUpdate(){
        if(this.state.x %5 == 0){
            return true;
        }else{
            return false;
        }
    }

    componentWillUnmount(){
        console.log("Component Will unMount Called");
    }
}

export default LifeCycle1;