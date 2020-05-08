let humanScore = 0;
let computerScore = 0;
let currentRoundNumber = 1;

// Write your code below:
const generateTarget = () => {
  return Math.floor(Math.random() * 10);
};

// Determines winner
const compareGuesses = (currentHumanGuess, computerGuess, target) => {
  
    if (Math.abs(currentHumanGuess - computerGuess) === 0 || Math.abs(currentHumanGuess - target) < Math.abs(computerGuess - target)) {
        return true;
      } else {
        return false;
      }
  
};

// Updates winner's score
const updateScore = (winner) => {
  if (winner === 'human') {
    humanScore += 1;
  } else if (winner === 'computer') {
    computerScore += 1;
  }
};

// Proceeds to next round
const advanceRound = () => currentRoundNumber++;

