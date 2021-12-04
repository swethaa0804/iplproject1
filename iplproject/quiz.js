var pos=0, board, qus, choices, A, B, C, D, cor=0, wrong_ans=[];


function DisplayQuestions()
{
    board=document.getElementById("board");
    if(pos>=questions.length)
    {
        board.innerHTML="<h2>You got "+cor+" of " + questions.length+ "</h2>";
        board.innerHTML="<h2>wrong answers in "+wrong_ans.forEach()+"</h2>";

        pos=0;
        cor=0;
        return false;
    }
    document.getElementById("status").innerHTML="Question "+(pos+1)+" of "+questions.length;
    qus=questions[pos].QUE;
    A=questions[pos].O1;
    B=questions[pos].O2;
    C=questions[pos].O3;
    D=questions[pos].O4;
    board.innerHTML="<h3>"+qus+"</h3>";
    board.innerHTML+="<label><input type='radio' name='choices' value='A'>"+A+"</label>";
    board.innerHTML+="<label><input type='radio' name='choices' value='B'>"+B+"</label>";
    board.innerHTML+="<label><input type='radio' name='choices' value='C'>"+C+"</label>";
    board.innerHTML+="<label><input type='radio' name='choices' value='D'>"+D+"</label>";
    board.innerHTML+="<button onclick='checkAnswer()'>Submit Answer</button>";
}

function checkAnswer()
{
    var choice;
    choices = document.getElementsByName("choices");
    for(var i=0;i<choices.length;i++)
    {    
        if(choices[i].checked)
        {
            choice=choices[i].value;
        }
    }
    if(choice==questions[pos].ANS)
    {
        cor++;
    }
    else
    {
        wrong_ans.push(pos);
    }
    pos++;
    DisplayQuestions();
}