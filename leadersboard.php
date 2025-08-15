<?php
include("includes/leaders-head.php");
?>
<body>

  <?php
include("includes/pre-loader.php");
?>
<?php
include("includes/nav.php");
?>
    <div class="container" style="padding-top: 100px; padding-bottom: 15px;">
        <div class="header">
          <img src="./images/chess2.png" alt="" width="120px" height="80px">
            <h1>College Chess Leaderboard</h1>
        </div>
        <table class="leaderboard">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Player</th>
                    <th>Name</th>
                    <th>Rating</th>
                    <th>Points</th>
                    <th>Institution</th>
                </tr>
            </thead>
            <tbody>
                <!-- Demo Data for 30 Players -->
                <tr><td>1</td><td><img src="https://via.placeholder.com/50" alt="Player 1"></td><td>Player 1</td><td>2500</td><td>100</td><td>Institution A</td></tr>
                <tr><td>2</td><td><img src="https://via.placeholder.com/50" alt="Player 2"></td><td>Player 2</td><td>2450</td><td>98</td><td>Institution B</td></tr>
                <tr><td>3</td><td><img src="https://via.placeholder.com/50" alt="Player 3"></td><td>Player 3</td><td>2400</td><td>96</td><td>Institution C</td></tr>
                <tr><td>4</td><td><img src="https://via.placeholder.com/50" alt="Player 4"></td><td>Player 4</td><td>2350</td><td>94</td><td>Institution D</td></tr>
                <tr><td>5</td><td><img src="https://via.placeholder.com/50" alt="Player 5"></td><td>Player 5</td><td>2300</td><td>92</td><td>Institution E</td></tr>
                <tr><td>6</td><td><img src="https://via.placeholder.com/50" alt="Player 6"></td><td>Player 6</td><td>2250</td><td>90</td><td>Institution F</td></tr>
                <tr><td>7</td><td><img src="https://via.placeholder.com/50" alt="Player 7"></td><td>Player 7</td><td>2200</td><td>88</td><td>Institution G</td></tr>
                <tr><td>8</td><td><img src="https://via.placeholder.com/50" alt="Player 8"></td><td>Player 8</td><td>2150</td><td>86</td><td>Institution H</td></tr>
                <tr><td>9</td><td><img src="https://via.placeholder.com/50" alt="Player 9"></td><td>Player 9</td><td>2100</td><td>84</td><td>Institution I</td></tr>
                <tr><td>10</td><td><img src="https://via.placeholder.com/50" alt="Player 10"></td><td>Player 10</td><td>2050</td><td>82</td><td>Institution J</td></tr>
                <tr><td>11</td><td><img src="https://via.placeholder.com/50" alt="Player 11"></td><td>Player 11</td><td>2000</td><td>80</td><td>Institution K</td></tr>
                <tr><td>12</td><td><img src="https://via.placeholder.com/50" alt="Player 12"></td><td>Player 12</td><td>1950</td><td>78</td><td>Institution L</td></tr>
                <tr><td>13</td><td><img src="https://via.placeholder.com/50" alt="Player 13"></td><td>Player 13</td><td>1900</td><td>76</td><td>Institution M</td></tr>
                <tr><td>14</td><td><img src="https://via.placeholder.com/50" alt="Player 14"></td><td>Player 14</td><td>1850</td><td>74</td><td>Institution N</td></tr>
                <tr><td>15</td><td><img src="https://via.placeholder.com/50" alt="Player 15"></td><td>Player 15</td><td>1800</td><td>72</td><td>Institution O</td></tr>
                <tr><td>16</td><td><img src="https://via.placeholder.com/50" alt="Player 16"></td><td>Player 16</td><td>1750</td><td>70</td><td>Institution P</td></tr>
                <tr><td>17</td><td><img src="https://via.placeholder.com/50" alt="Player 17"></td><td>Player 17</td><td>1700</td><td>68</td><td>Institution Q</td></tr>
                <tr><td>18</td><td><img src="https://via.placeholder.com/50" alt="Player 18"></td><td>Player 18</td><td>1650</td><td>66</td><td>Institution R</td></tr>
                <tr><td>19</td><td><img src="https://via.placeholder.com/50" alt="Player 19"></td><td>Player 19</td><td>1600</td><td>64</td><td>Institution S</td></tr>
                <tr><td>20</td><td><img src="https://via.placeholder.com/50" alt="Player 20"></td><td>Player 20</td><td>1550</td><td>62</td><td>Institution T</td></tr>
                <tr><td>21</td><td><img src="https://via.placeholder.com/50" alt="Player 21"></td><td>Player 21</td><td>1500</td><td>60</td><td>Institution U</td></tr>
                <tr><td>22</td><td><img src="https://via.placeholder.com/50" alt="Player 22"></td><td>Player 22</td><td>1450</td><td>58</td><td>Institution V</td></tr>
                <tr><td>23</td><td><img src="https://via.placeholder.com/50" alt="Player 23"></td><td>Player 23</td><td>1400</td><td>56</td><td>Institution W</td></tr>
                <tr><td>24</td><td><img src="https://via.placeholder.com/50" alt="Player 24"></td><td>Player 24</td><td>1350</td><td>54</td><td>Institution X</td></tr>
                <tr><td>25</td><td><img src="https://via.placeholder.com/50" alt="Player 25"></td><td>Player 25</td><td>1300</td><td>52</td><td>Institution Y</td></tr>
                <tr><td>26</td><td><img src="https://via.placeholder.com/50" alt="Player 26"></td><td>Player 26</td><td>1250</td><td>50</td><td>Institution Z</td></tr>
                <tr><td>27</td><td><img src="https://via.placeholder.com/50" alt="Player 27"></td><td>Player 27</td><td>1200</td><td>48</td><td>Institution AA</td></tr>
                <tr><td>28</td><td><img src="https://via.placeholder.com/50" alt="Player 28"></td><td>Player 28</td><td>1150</td><td>46</td><td>Institution AB</td></tr>
                <tr><td>29</td><td><img src="https://via.placeholder.com/50" alt="Player 29"></td><td>Player 29</td><td>1100</td><td>44</td><td>Institution AC</td></tr>
                <tr><td>30</td><td><img src="https://via.placeholder.com/50" alt="Player 30"></td><td>Player 30</td><td>1050</td><td>42</td><td>Institution AD</td></tr>
            </tbody>
        </table>
    </div>
    <?php
include("includes/footer.php");
?>