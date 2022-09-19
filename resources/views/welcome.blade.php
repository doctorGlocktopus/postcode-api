<html>
<head>
    <meta charset="utf-8">
<style>
    body {
        font-family: monospace;
        background-color: #5AE88C;
    }

    #main {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        padding: 5%;
    }

    summary {
        padding: 2%;
        cursor: pointer;
    }

    summary:hover {
        background: rgba(255, 255, 255, 0.288);
    }

    #heading {
        font-size: 840%;
        color: #AF72E8;
        text-shadow: 1px 1px 2px black, 0 0 1em #9c7335, 0 0 0.2em #9c7335;
    }

    input {
        cursor: default;
        margin-top: 2%;
        height: 50px;
        width: 100%;
        font-size: 150%;
    }

    .content {
        border-radius: 10px;
        background-color: #2D9C54;
        width: 50%;
        min-width: 590px;
        padding: 2%;
    }

    details {
        margin-top: 2%;
        margin-bottom: 2%;
        font-size: 150%;
        background-color: #E8A743;
        width: 100%;
        box-shadow: 1px 1px 2px black, 0 0 1em #9c7335, 0 0 0.2em #9c7335;
    }

    p {
        padding-left: 2%;
        padding-bottom: 2%;
    }

    a {
        color: black;
    }

    .topRight {
        top: 1%;
        right: 1%;
        position: fixed;
    }

    dialog::backdrop {
        background: rgba(255, 255, 255, 0.452);
    }

    dialog {
        border-radius: 10px;
        animation: fadeInAnimation ease 1s;
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
    }

    @keyframes fadeInAnimation {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    .kreis {
        z-index: -1;
        top: -178%;
        left: -40%;
        position: fixed;
        width: 2500px;
        height: 2500px;
        border-radius: 1250px;
        line-height: 500%;
        text-align: center;
        background: #9C7335;
        animation: fill 5s ease infinite;
    }
    @keyframes fill {
        0% {
            top: -178%;
            left: -40%;
        }
        
        50% {
            top: -178%;
            left: -39.5%;
        }
        
        100% {
            top: -178%;
            left: -40%;
        }
    }



</style>
<script src="https://unpkg.com/alpinejs"></script>
    @livewireStyles
</head>
<body>
    @livewireScripts
<div id="main">
    <livewire:call />
</div>

<div class="kreis"></div>
</body>
</html>