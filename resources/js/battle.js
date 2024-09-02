const PLAYER_NAME = document.getElementById('player_name');
let playerName = sessionStorage.getItem('name');
PLAYER_NAME.textContent = playerName+"は どうする？";
