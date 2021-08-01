
<style>
    .cardDiv{
        width: 66vw;
        margin:auto;
        display:flex;
        justify-content: space-between;
        flex-wrap: wrap;
    
    }
    .cardClass{
        margin:15px 10px;
        width:350px;
        height: auto;
    }

</style>
<div class="cardDiv">
    <?php
    $arr = array(   'https://images.unsplash.com/photo-1489161587020-79aa193f04ff?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80',
                    'https://images.unsplash.com/photo-1602587365437-5d02d274b3cc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=769&q=80',
                    'https://images.unsplash.com/photo-1497119146420-012f8fc80a3a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=633&q=80',
                    'https://images.unsplash.com/photo-1502490671759-21b5c49c732f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=644&q=80',
                    'https://images.unsplash.com/photo-1582425312148-de9955e68e45?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
                    'https://images.unsplash.com/photo-1595173425119-1c54835c1874?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80'
                );
    foreach ($arr as $value) 
    echo '<img class="cardClass" src="' . $value .'">';
    ?>  
</div>