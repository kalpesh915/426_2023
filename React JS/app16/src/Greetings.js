import { useParams } from "react-router-dom";

function Greetings(){
    const {roll} = useParams();
    const {fname} = useParams();
    const {lname} = useParams();
    return <>
        <h1 className="text-bg-primary p-5 text-center">Welcome {fname} {lname} Your roll no. is {roll}</h1>
    </>
}

export default Greetings;