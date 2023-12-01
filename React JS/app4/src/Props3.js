import React from "react";
class Props3 extends React.Component{
    constructor(){
        super();
    }

    render(){
        return <>
            <h1>Value of Props is {this.props.data.val1} and {this.props.data.val2}</h1>
        </>
    }
}

export default Props3;