import React, { createRef } from "react";
class RefExample1 extends React.Component{
    constructor(){
        super();
        this.fnameRef = createRef("Rajkot");
    }

    updateFname(){
        this.fnameRef.current.value = "IANT Rajkot";
        this.fnameRef.current.style = "color:white; background-color:brown; padding:10px;";
    }

    componentDidMount(){
        console.log(this.fnameRef.current.value);
    }

    render(){
        return <>
            <h1>Example of Ref in React JS</h1>
            <input type="text" ref={this.fnameRef}></input>
            <hr></hr>
            <button className="btn btn-primary" onClick={()=>this.updateFname()}>Update</button>
        </>
    }
}

export default RefExample1;