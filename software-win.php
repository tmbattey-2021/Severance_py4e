<?php include("top.php"); ?>
<?php include("nav.php"); ?>
<h1>Installing Python 3 On Windows 10</h1>
<p><b>Note:</b> Any reasonably recent version of Python is acceptable for this course.
If you have a version of Python 3.x on your computer already you should be able to use it for this class.
</p>
<p>Please download and install Python 3.x from:</p>
<p><a href="http://www.python.org/download/" target="_blank">http://www.python.org/download/</a></p>
<p>As you install Python, make sure to check the "Add Python 3.5 to PATH" so that you can 
type <b>python</b> at the command line prompt to run Python.
</p>
<b>Installing A Programming Text Editor</b>
<p>If you already have a programmer text editor like
<a href="https://code.visualstudio.com/" target="_blank">VS-Code</a> installed you can use it in the class
or you can install it on your system.
</p>
<p>
If the installation for VSCode looks a little too complex, we recommend the free and open source
<a href="https://brackets.io/" target="_blank">Brackets</a> text editor.  It is easy
to install and is very capable for your needs in the course.
</p>

<h1>Writing a Python 3 program Windows-10</h1>
<p>
We have a short 
<a href="https://www.youtube.com/watch?v=ARAL3ib5G6Q&index=1&list=PLlRFEj9H3Oj7Bp8-DfGpfAfDBiblRfl5p" target="_blank">
step-by-step video</a> showing how to install Python 3 and write your first program.
</p>
<h1>Windows Command Line Notes</h1>
<p>
When the command line starts <b style="color:black;background-color:#a0ffff">up</b>, you are in your "home" directory.  Your home directory 
is different for each of the operating systems.  
In each of these examples, your logged in account should be used instead of csev.</p>
<pre>
    Windows XP:             C:\Documents and Settings\csev
    Windows Vista:          C:\Users\csev
    Windows 7:              C:\Users\csev
    Windows 10:             C:\Users\csev
    Windows 10 OneDrive:    C:\Users\csev\OneDrive
</pre>
The command line prompt usually includes some clue as to 
where you are in the folder structure on your hard drive.
<p>
If you want to really figure out where you are, use the cd command with no parameters
</p>
<pre>
    C:\Users\csev> cd
    C:\Users\csev
</pre>
<p>
Where can you go?
</p>
<p>
Generally the first thing you want to do when you open a command line 
interface is to navigate to the right folder.  Say you wanted to run a 
file from your desktop.   The command is <b>cd Desktop</b> (or <b>cd OneDrive\Desktop</b>) 
to get into the 
folder that is your Desktop.  You can use the <b>dir</b> command to see 
which files are in the current directory and the 
<b>cd ..</b> command to go "<b style="color:black;background-color:#a0ffff">up</b>" a directory
</p>
<p> 
<b>Nifty Trick:</b>  On the cd command, you can partially type a folder name like
Desktop and then press the TAB key and the system will auto-complete the folder name 
if you have typed enough that the system can accurately guess what you mean to type.</p>
<p>
If you get Lost...</p>
<p>
If you can't figure out what folder you are in and/or cannot figure out how 
to get to the folder you want to get to - simply close and re-open 
the Command Line / Terminal window.  You will be back to 
your "home" directory - so you can start from a known location.</p>
<p>
Some Cool Hints on the Windows Command Line Interface
</p>
<p>
If you click on the little icon in the upper-left of the command prompt window 
and select Preferences - you can set many things about the command line - probably 
the most important is to set the Command History Buffer Size to be 999.
</p>
<h1>Running Your Python Program in the Command Line</h1>
<p>
To run your program in the command line you type at the command line prompt.
Windows knows that files that end with a ".py" suffix are Python programs.
<pre>
    python firstprog.py
</pre>
or
<pre>
    firstprog.py
</pre>
Where firstprog.py is the name of the file containing your Python program.  
Make sure to use the cd command to be in the correct directory that contains your program file(s).
</p>
<p> 
You can run your program over and over again in the command window.  
Hint:  You can use the <b style="color:black;background-color:#a0ffff">up</b>-arrow key to scroll back through previous 
commands and re-execute them by pressing enter.  This allows you to quickly 
edit and rerun your program to make and test changes.
</p>
<?php include('footer.php');?>
