import logo from './logo.svg';
import './App.css';
import Demo from './Demo';
import Sample1 from './Sample1';
import {Kairavi, Sunny, Ashita} from './Students';
function App() {
  return (
    <div className="App">
      <header className="App-header">
        <h1>Welocme to world of React JS</h1>
        <Demo></Demo>
        <Sample1></Sample1>
        <Ashita></Ashita>
        <Sunny></Sunny>
      </header>
    </div>
  );
}

export default App;
