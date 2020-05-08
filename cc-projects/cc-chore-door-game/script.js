//global variables
let	currentlyPlaying = true, 
		doorImage1 = document.getElementById('door1'),
    doorImage2 = document.getElementById('door2'),
    doorImage3 = document.getElementById('door3'),
    numClosedDoors = 3,
    openDoor1,
    openDoor2,
    openDoor3,
    startButton = document.getElementById('start');

//image paths
let beachDoorPath = 'https://s3.amazonaws.com/codecademy-content/projects/chore-door/images/beach.svg',
    botDoorPath = 'https://s3.amazonaws.com/codecademy-content/projects/chore-door/images/robot.svg',
    spaceDoorPath = 'https://s3.amazonaws.com/codecademy-content/projects/chore-door/images/space.svg',
    closedDoorPath = 'https://s3.amazonaws.com/codecademy-content/projects/chore-door/images/closed_door.svg';

const isBot = door => {
  if (door.src === botDoorPath) {
    return true;
  } else {
    return false;
  }
};

//checks if door has been clicked on
const isClicked = door => {
  if (door.src === closedDoorPath) {
  	return false;  
  } else {
    return true;
  }
};

//check number of clicked doors
const playDoor = door => {
  numClosedDoors--;
  if (numClosedDoors === 0) {
    gameOver('win');
  } else if (isBot(door)) {
    gameOver();
  }
};

//door generator
const randomChoreDoorGenerator = () => {
  const choorDoor = Math.floor(Math.random() * numClosedDoors);
  if (choorDoor === 0) {
    openDoor1 = botDoorPath;
    openDoor2 = beachDoorPath;
    openDoor3 = spaceDoorPath;
  } else if (choorDoor === 1) {
    openDoor1 = spaceDoorPath;
    openDoor2 = botDoorPath;
    openDoor3 = beachDoorPath;
  } else if (choorDoor === 2) {
    openDoor1 = beachDoorPath;
    openDoor2 = spaceDoorPath;
    openDoor3 = botDoorPath;
  }
};

//events on clicks
doorImage1.onclick = () => {
  if(currentlyPlaying && !isClicked(doorImage1)) {
  	doorImage1.src = openDoor1;
  	playDoor(doorImage1);
	};
}

doorImage2.onclick = () => {
	if(currentlyPlaying && !isClicked(doorImage2)) {
  	doorImage2.src = openDoor2;
  	playDoor(doorImage2);
	};   
}

doorImage3.onclick = () => {
  if(currentlyPlaying && !isClicked(doorImage3)) {
  	doorImage3.src = openDoor3;
  	playDoor(doorImage3);
	};   
}

startButton.onclick = () => {
  if(!currentlyPlaying) {
   startRound();  
  }
}

const startRound = () => {
  //resets variables
  currentlyPlaying = true;
  doorImage1.src = closedDoorPath;
  doorImage2.src = closedDoorPath;
  doorImage3.src = closedDoorPath;
  numClosedDoors = 3;
  startButton.innerHTML = 'Good Luck';
  //triggers game
  randomChoreDoorGenerator();
};

const gameOver = status => {
  if (status === 'win') {
    startButton.innerHTML = 'You win! Play again?';
  } else {
    startButton.innerHTML = 'Game Over! Play again?';
  }
  currentlyPlaying = false;
};

startRound();