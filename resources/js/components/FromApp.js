import React from "react";
import ReactDOM from "react-dom";

function FromApp() {
    return (
        <div>
            <h1>Component register in App.js</h1>
        </div>
    );
}

export default FromApp;

if (document.getElementById("FromApp")) {
    ReactDOM.render(<FromApp />, document.getElementById("FromApp"));
}
