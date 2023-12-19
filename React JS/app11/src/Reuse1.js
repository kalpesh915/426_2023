function Reuse1(){
    return <>
        <Printer name="Kairavi"></Printer>       
        <Printer name="Jigar"></Printer>       
        <Printer name="Sunny"></Printer>       
        <Printer name="Harshil"></Printer>       
        <Printer name="Kalpesh"></Printer>       
        <Printer name="Nikhil"></Printer>       
        <Printer name="Ashita"></Printer>       
    </>
}

function Printer(props){
    return <>
        <h1>Welcome {props.name}</h1>
    </>
}

export default Reuse1;