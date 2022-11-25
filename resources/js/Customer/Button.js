import React, { useState } from "react";
import ReactDOM from "react-dom";
import "./Button.css";

const Button = (props) => {
    const [isClicked, setIsClicked] = useState("false");

    const buttonClicked = () => {
        setIsClicked(true);
    };

    const buttonNotClicked = () => {
        setIsClicked(false);
    };

    // const [DashboardIsClicked, setDashboardIsClicked] = useState("true");
    // const [OrderHistoryIsClicked, setOrderHistoryIsClicked] = useState("false");
    // const [UpdateProfileIsClicked, setUpdateProfileIsClicked] =
    //     useState("false");

    return (
        <div>
            {!isClicked && (
                <button className="clicked" onClick={buttonClicked}>
                    {props.name}
                </button>
            )}
            {isClicked && (
                <button className="notClicked" onClick={buttonNotClicked}>
                    {props.name}
                </button>
            )}
        </div>
    );
};

export default Button;
