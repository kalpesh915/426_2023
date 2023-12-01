import logo from './logo.svg';
import './App.css';
import Component1 from './Component1';
import Component2 from './Component2';
import Component3 from './Component3';
import Component4 from './Component4';
import Component5 from './Component5';
import Nested from './Nested';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        {/* <Component1></Component1> */}
        {/* <Component1 />
        <Component2 />
        <Component3 />
        <Component4 />
        <Kairavi/>
        <Component5/> */}
        <Nested/>
      </header>
    </div>
  );
}

function Kairavi(){
  return <>
    <h1>Hi, I am Kairavi Parsana</h1>
  </>
}

export default App;
