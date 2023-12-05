import logo from './logo.svg';
import './App.css';
import LifeCycle1 from './LifeCycle1';
import { useState } from 'react';

function App() {
  let [status, setStatus] = useState(true);
  return (
    <div className="App">
      <header className="App-header">
        {
          status ? <LifeCycle1></LifeCycle1> : "Hidden"
        }
        <button onClick={()=>setStatus(!status)}>Hide / Show</button>
      </header>
    </div>
  );
}

export default App;
