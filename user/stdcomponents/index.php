<style>
    @import "https://fonts.googleapis.com/css?family=Montserrat:200,700&display=swap";

    .app h1 {
        font-size: 2.2rem;
        margin: 0;
        font-weight: 600;
        line-height: 1.15;
    }

    @media (min-width: 900px) {
        .app h1 {
            font-size: 2.488rem;
        }
    }

    .app h2 {
        font-size: 1.4rem;
        margin: 0.5rem 0;
        line-height: 1.15;
    }

    @media (min-width: 900px) {
        .app h2 {
            margin: 1rem 0;
            font-size: 1.44rem;
        }
    }

    .app p {
        margin-top: 0.25rem;
    }

    @media (min-width: 900px) {
        .app p {
            margin-top: 0.5rem;
        }
    }

    .app a {
        color: #0F1108;
        text-decoration: none;
        border-bottom: currentcolor 1px solid;
    }

    .app {
        position: relative;
        background: var(--bg-gray-200);
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: calc(85vh);
        overflow: hidden;

        font-family: "Montserrat", sans-serif;
        font-weight: 300;
        line-height: 1;
        font-size: 16px;
        color: #0f1108;
    }

    .app--debug .grab-zone {
        background: rgba(0, 0, 0, 0.15);
    }

    .app--debug .grab-zone__debug {
        display: block;
    }

    .app--debug .grab-zone__danger {
        background: rgba(0, 0, 0, 0.15);
    }

    .app--debug .grabber__arm-wrapper {
        background: rgba(0, 0, 0, 0.15);
    }

    .grab-zone-wrapper {
        position: absolute;
        bottom: 0;
        right: 0;
        transform: translateX(30%) translateY(50%);
    }

    .grab-zone {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 700px;
        height: 700px;
        border-radius: 50%;
    }

    .grab-zone__danger {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 400px;
        height: 400px;
        border-radius: 50%;
    }

    .grab-zone__debug {
        display: none;
        position: absolute;
        width: 300px;
        top: -100px;
        font-size: 14px;
        text-align: center;
        text-transform: uppercase;
    }

    .grabber {
        position: relative;
        width: 100px;
        height: 100px;
    }

    .grabber__arm-wrapper {
        position: absolute;
        top: -80px;
        width: 24px;
        height: 260px;
    }

    .grabber__arm {
        position: relative;
        width: 24px;
        height: 200px;
        background: #7D9A9E;
        border-radius: 20px;
        overflow: visible;
        transform: translateY(100%);
        transition: transform 0.2s ease;
    }

    .grabber__hand {
        display: block;
        position: absolute;
        top: -12px;
        transform: scale(1.4) rotate(-10deg) translateY(100%);
        transform-origin: bottom center;
        transition: transform 0.3s ease;
    }

    .grabber__face {
        position: absolute;
        width: 75px;
        height: 84px;
        right: 5%;
        transition: transform 0.3s ease;
    }

    .grabber__body {
        position: absolute;
        top: 50%;
        left: 0%;
        width: 110px;
        height: 95px;
        border-radius: 50%;
        background: #7D9A9E;
        transition: transform 0.3s ease;
    }

    .grabber--waiting .grabber__hand {
        transform: scale(1.4) rotate(-10deg);
    }

    .grabber--waiting .grabber__arm {
        transform: translateY(80%);
    }

    .grabber--waiting .grabber__face {
        transform: translateY(60%);
    }

    .grabber--stalking .grabber__hand {
        transform: scale(1.4) rotate(-10deg);
    }

    .grabber--stalking .grabber__arm {
        transform: translateY(70%);
    }

    .grabber--stalking .grabber__face {
        transform: translateY(10%);
    }

    .grabber--grabbing .grabber__face {
        transform: translateY(-40%) rotate(10deg);
    }

    .grabber--grabbing .grabber__arm {
        transform: translateY(0%);
    }

    .grabber--grabbing .grabber__body {
        transform: translateY(-20%);
    }

    .grabber--grabbing .grabber__hand {
        transform: scale(1.7) rotate(10deg);
    }

    .grabber--grabbed .grabber__arm {
        transition: transform 1s ease;
    }

    .grabber--grabbed .grabber__hand {
        transition: transform 2.5s ease;
    }

    .grabber--grabbed .grabber__face {
        transform: translateY(70%);
        transition: transform 1s ease;
    }

    .grabber--grabbed .grabber__body {
        transform: translateY(50%);
        transition: transform 1s ease;
    }

    .grabber--extended .grabber__arm {
        transform: translateY(-20%);
    }

    .grabber--extended .grabber__face {
        transform: translateY(-60%) rotate(15deg);
    }

    .grabber--extended .grabber__body {
        transform: translateY(-40%);
    }

    .grabber--shaka .grabber__arm {
        transform: translateY(50%);
    }

    .grabber--shaka .grabber__hand {
        transform: scale(2.5) translateY(10%);
        -webkit-animation: shaka 0.5s infinite alternate forwards;
        animation: shaka 0.5s infinite alternate forwards;
        transform-origin: 55% 60%;
    }

    .grabber--shaka .grabber__face {
        transform: translateY(70%);
        transition: transform 1s ease;
    }

    .grabber--shaka .grabber__body {
        transform: translateY(50%);
        transition: transform 1s ease;
    }

    .trap-button {
        position: absolute;
        bottom: 80px;
        right: 70px;
        min-width: 125px;
        background: #8ECACC;
        color: white;
        border-radius: 5px;
        padding: 0.4rem 0.5rem;
        font-weight: 600;
        font-size: 18px;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .debug-button {
        position: fixed;
        top: 0;
        right: 0;
        background: transparent;
        padding: 1rem;
        margin: 1rem;
        font-size: 16px;
        text-transform: uppercase;
        letter-spacing: 1px;
        opacity: 0.5;
    }

    @-webkit-keyframes shaka {
        0% {
            transform: scale(2.5) translateY(0%) rotate(-20deg);
        }

        100% {
            transform: scale(2.5) translateY(0%) rotate(20deg);
        }
    }

    @keyframes shaka {
        0% {
            transform: scale(2.5) translateY(0%) rotate(-20deg);
        }

        100% {
            transform: scale(2.5) translateY(0%) rotate(20deg);
        }
    }
</style>
<div id="app"></div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/react/16.9.0/umd/react.production.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/react-dom/16.9.0/umd/react-dom.production.min.js'></script>
<script>
    const {
        useState,
        useRef,
        useEffect,
        useLayoutEffect,
        createContext
    } = React;

    /**
     * Globals
     */

    const CONSTANTS = {
        assetPath: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/184729",
    };

    const ASSETS = {
        head: `${CONSTANTS.assetPath}/head.svg`,
        waiting: `${CONSTANTS.assetPath}/hand.svg`,
        stalking: `${CONSTANTS.assetPath}/hand-waiting.svg`,
        grabbing: `${CONSTANTS.assetPath}/hand.svg`,
        grabbed: `${CONSTANTS.assetPath}/hand-with-cursor.svg`,
        shaka: `${CONSTANTS.assetPath}/hand-surfs-up.svg`,
    };

    // Preload images
    Object.keys(ASSETS).forEach((key) => {
        const img = new Image();
        img.src = ASSETS[key];
    });

    /**
     * Shared hooks
     */

    // Hover state - https://dev.to/spaciecat/hover-states-with-react-hooks-4023
    const useHover = () => {
        const ref = useRef();
        const [hovered, setHovered] = useState(false);

        const enter = () => setHovered(true);
        const leave = () => setHovered(false);

        useEffect(() => {
            ref.current.addEventListener("mouseenter", enter);
            ref.current.addEventListener("mouseleave", leave);
            return () => {
                ref.current.removeEventListener("mouseenter", enter);
                ref.current.removeEventListener("mouseleave", leave);
            };
        }, [ref]);

        return [ref, hovered];
    };

    // Mouse position
    const useMousePosition = () => {
        const [position, setPosition] = useState({
            x: 0,
            y: 0,
        });

        useEffect(() => {
            const setFromEvent = (e) =>
                setPosition({
                    x: e.clientX,
                    y: e.clientY,
                });
            window.addEventListener("mousemove", setFromEvent);

            return () => {
                window.removeEventListener("mousemove", setFromEvent);
            };
        }, []);

        return position;
    };

    // Element position
    const usePosition = () => {
        const ref = useRef();
        const [position, setPosition] = useState({});

        const handleResize = () => {
            setPosition(ref.current.getBoundingClientRect());
        };

        useLayoutEffect(() => {
            handleResize();
            window.addEventListener("resize", handleResize);

            return () => {
                window.removeEventListener("resize", handleResize);
            };
        }, [ref.current]);

        return [ref, position];
    };

    /**
     * React Components
     */

    class App extends React.Component {
        constructor(props) {
            super(props);
            this.state = {
                debug: false,
                cursorGrabbed: false,
                gameOver: false,
            };

            this.handleButtonClicked = this.handleButtonClicked.bind(this);
            this.handleCursorGrabbed = this.handleCursorGrabbed.bind(this);
        }

        handleCursorGrabbed() {
            this.setState({
                cursorGrabbed: true,
            });

            setTimeout(() => {
                this.setState({
                    cursorGrabbed: false,
                });
            }, 2000);
        }

        handleButtonClicked() {
            this.setState({
                gameOver: true,
            });

            setTimeout(() => {
                this.setState({
                    gameOver: false,
                });
            }, 4000);
        }

        render() {
            const {
                cursorGrabbed,
                gameOver,
                debug
            } = this.state;
            const screenStyle = cursorGrabbed ? {
                cursor: "none",
            } : {};
            const appClass = debug ? "app app--debug" : "app";

            return React.createElement(
                "div", {
                    className: appClass,
                    style: screenStyle,
                },
                React.createElement(
                    "section", {
                        className: "container",
                    },
                    React.createElement("h1", null, "Hello!"),
                    React.createElement("h2", null, "Welcome to Manvaasam."),
                    React.createElement(
                        "p",
                        null,
                        "This is the welcome page of the Manvaasam Student area. You can learn many things by clicking the sidebar links."
                    ),
                    React.createElement(
                        "p",
                        null,
                        "Still not sure what to do? Try clicking the button below."
                    )
                ),

                React.createElement(
                    "button", {
                        className: "trap-button",
                        onClick: this.handleButtonClicked,
                    },
                    gameOver && "Nice one",
                    cursorGrabbed && "Gotcha!",
                    !gameOver && !cursorGrabbed && "Button!"
                ),

                React.createElement(
                    "div", {
                        className: "grab-zone-wrapper",
                    },
                    React.createElement(GrabZone, {
                        onCursorGrabbed: this.handleCursorGrabbed,
                        cursorGrabbed: cursorGrabbed,
                        gameOver: gameOver,
                    })
                )
            );
        }
    }

    // GrabZone (The hover trigger zone)
    const GrabZone = ({
        cursorGrabbed,
        gameOver,
        onCursorGrabbed
    }) => {
        const [outerRef, outerHovered] = useHover();
        const [innerRef, innerHovered] = useHover();
        const [isExtended, setExtendedArm] = useState(false);

        let state = "waiting";
        if (outerHovered) {
            state = "stalking";
        }
        if (innerHovered) {
            state = "grabbing";
        }
        if (cursorGrabbed) {
            state = "grabbed";
        }
        if (gameOver) {
            state = "shaka";
        }

        // If state is grabbing for a long time, they're being clever!
        useEffect(() => {
            let timer;
            if (state === "grabbing") {
                timer = setTimeout(() => {
                    // Not so clever now, are they?
                    setExtendedArm(true);
                    timer = null;
                }, 2000);
            }
            return () => {
                setExtendedArm(false);
                if (timer) {
                    clearTimeout(timer);
                }
            };
        }, [state]);

        return React.createElement(
            "div", {
                className: "grab-zone",
                ref: outerRef,
            },
            React.createElement(
                "div", {
                    className: "grab-zone__debug",
                },
                React.createElement("strong", null, "Debug info:"),
                React.createElement("p", null, "Current state: ", state),
                React.createElement(
                    "p",
                    null,
                    "Extended arm: ",
                    isExtended ? "Yes" : "No"
                )
            ),

            React.createElement(
                "div", {
                    className: "grab-zone__danger",
                    ref: innerRef,
                },
                React.createElement(Grabber, {
                    state: state,
                    gameOver: gameOver,
                    extended: isExtended,
                    onCursorGrabbed: onCursorGrabbed,
                })
            )
        );
    };

    // Grabber (The graphic)
    const Grabber = ({
        state,
        gameOver,
        extended,
        onCursorGrabbed
    }) => {
        const mousePos = useMousePosition();
        const [ref, position] = usePosition();
        const hasCursor = false;

        // Calculate rotation of armWrapper
        const x = position.left + position.width * 0.5;
        const y = position.top + position.height * 0.5;
        const angle = gameOver ?
            0 :
            Math.atan2(mousePos.x - x, -(mousePos.y - y)) * (180 / Math.PI);

        // Ensure value is within acceptable range (-75 to 75)
        const rotation = Math.min(Math.max(parseInt(angle), -79), 79);

        const grabberClass = `grabber grabber--${state} ${
    extended && "grabber--extended"
  }`;
        const wrapperStyle = {
            transform: `rotate(${rotation}deg)`,
        };

        let handImageSrc = ASSETS[state];

        return React.createElement(
            "div", {
                className: grabberClass,
            },
            React.createElement("div", {
                className: "grabber__body",
            }),
            React.createElement("img", {
                className: "grabber__face",
                src: ASSETS.head,
            }),
            React.createElement(
                "div", {
                    className: "grabber__arm-wrapper",
                    ref: ref,
                    style: wrapperStyle,
                },
                React.createElement(
                    "div", {
                        className: "grabber__arm",
                    },
                    React.createElement("img", {
                        className: "grabber__hand",
                        src: handImageSrc,
                        onMouseEnter: onCursorGrabbed,
                    })
                )
            )
        );
    };
    ReactDOM.render(React.createElement(App, null), document.getElementById("app"));
</script>