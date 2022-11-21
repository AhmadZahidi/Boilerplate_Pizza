import React from "react";
import ReactDOM from "react-dom";

function FromMix() {
    return (
        <div>
            <h1>Component register in app.js</h1>
            <h2>d</h2>
        </div>
    );
}

export default FromMix;

if (document.getElementById("FromMix")) {
    ReactDOM.render(<FromMix />, document.getElementById("FromMix"));
}
