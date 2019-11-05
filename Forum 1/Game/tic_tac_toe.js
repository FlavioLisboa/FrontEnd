// TIC TAC TOE
const tic_tac_toe = {


    // ATTRIBUTES
    board: ['','','','','','','','','']
    Symbol: {
                options: ['O','X'],
                turn_index: 0,
                change(){
                    this.turn_index = ( this.turn_index === 0 ? 1:0);
            }
        },

    container_element: null,
    gameover: false,
    winning_sequences: [
                        [0,1,2],
                        [3,4,5],
                        [6,7,8],
                        [0,3,6],
                        [1,4,7],
                        [2,5,8],
                        [0,4,8],
                        [2,4,6],
                      ],

    //FUNCION
    int(container) {
        this.container_element = container;
    },

    make_play(position) {
        if (this.gameover || this.board[position] !== '') return false;

        const winning_sequences_index = this.check_winning_sequemces(currentSymbol);
        if (this.is_game_over()){
            this.game_is_over(;)
        }
        if (winning_sequences_index >= 0) {
            this.game_is_over();
            this.stylize_winner_sequence (this.winning_sequences[winning_sequences_index]);
        }else {
            this.Symbol.change();
        }

        return true;
    },

    stylize_winner_sequence(winning_sequences) {
        winning_sequences.forEach(position => {
            this

                .container_element
                .querySelector ('div:nth-child (${position + 1})')
                .classList.add ('winner');
             });
    },
    
    check_winning_sequemces(Symbol) {

        for (i in this.winning_sequences) {
            if (this.board[ this.winning_sequences[i][0] ] == Symbol  &&
                this.board[ this.winning_sequences[i][0] ] == Symbol &&
                this.board[ this.winning_sequences[i][0] ] == Symbol) {
                Console.log('winning sequences INDEX: ' + i);
                return i;
                }
        }
    };
    return -1;
};
