import React, { useState } from "react";
import ReactDOM from "react-dom";
import "./Button.css";

const Button = (props) => {
    const buttonIsClicked = () => {
        props.condition(true);
    };

    const buttonIsNotClicked = () => {
        props.condition(false);
    };

    return (
        <div>
            {!props.isClick && (
                <button className="clicked" onClick={buttonIsClicked}>
                    {props.name}
                </button>
            )}
            {props.isClick && (
                <button
                    className="notClicked"
                    onClick={buttonIsNotClicked}
                    disabled={true}
                >
                    {props.name}
                </button>
            )}
        </div>
    );
};

export default Button;
