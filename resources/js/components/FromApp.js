import React from "react";
import ReactDOM from "react";

const FromApp = () => {
    return (
        <div>
            <h1>Component register in app.js</h1>
        </div>
    );
};

export default FromApp;

if (document.getElementById("FromApp")) {
    ReactDOM.render(<FromApp />, document.getElementById("FromApp"));
}
