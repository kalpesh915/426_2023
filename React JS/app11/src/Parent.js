import Child from "./Child";

function Parent(){

    function Printer(value){
        alert("Printer Function of Parent value is "+value);
    }

    return <>
        <h1>Parent Component </h1>
        <Child data={Printer}></Child>
    </>
}

export default Parent;