import logo from './logo.svg';
import './App.css';
import Demo1 from './Demo1';
import Demo2 from './Demo2';
import Demo3 from './Demo3';
import Demo4 from './Demo4';
import { useState } from 'react';
import Props1 from './Props1';
import Props2 from './Props2';
import Props3 from './Props3';

function App() {

  let [ip1, setIp1] = useState(0);
  let [ip2, setIp2] = useState(0);

  return (
    <div className="App">
      <header className="App-header">
        {/* <Demo1></Demo1> */}
        {/* <Demo2></Demo2> */}
        {/* <Demo3></Demo3> */}
        {/* <Demo4></Demo4> */}
        {/* add props1 component and pass value of ip1 */}
        {/* <Props1 data={ip1}></Props1> */}
        {/* code for update ip1 */}
        {/* <Props2 data={{"val1":ip1, "val2":ip2}}></Props2> */}
        <Props3 data={{"val1":ip1, "val2":ip2}}></Props3>
        <button onClick={()=>{setIp1(ip1+1)}}>Update 1</button>
        <button onClick={()=>{setIp2(ip2+10)}}>Update 2</button>
      </header>
    </div>
  );
}

export default App;
