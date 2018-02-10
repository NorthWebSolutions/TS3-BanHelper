## TS3-BanHelper for ** TeamSpeak3 server admins **

#### Name Restrict to prevent logins with names like admin, system, moderator, etc.
The generated patterns, can be prevent tricky logins, like the look like realistic admin names `(Admin, *aDmin*, @dmin, suparAdmin )` etc.
You can add these patterns in your TeamSpeak3 servers Ban List `(CTRL+SHIFT+B)` / + ADD / REGULAR EXPRESSION.



## usage:
** Default **
` Banhelper->index(); `

** Translate your costume STRING: **
` Banhelper->index('yourStringToTranslateTS3regexLanguage'); `

##### You can run and change this code at:
http://sandbox.onlinephpfunctions.com/code/03ce0fefca9c8945d3e3e318b01a6df6e18dd228

```
- recommend by me -
.*[aA4@][dD][mM][iI1][nN].*
.*[sS][eE3][rR][vV][eE3][rR].*
.*[mM][oO0][dD][eE3][rR][aA4@][tT][oO0][rR].*
.*[sS][yY][sS][tT][eE3][mM].*
.*[oO0][wW][nN][eE3][rR].*
.*[tT][eE3][aA4@][mM][sS][pP][eE3][aA4@][kK][uU][sS][eE3][rR].*


recommend:
Default name patern / allowed chars - .*.*[^A-Za-z0-9\s_-\(\)]+
Disable [] characters.*[\[\]].*

- generated costume value: coookiemonster -
.*[cC][oO0][oO0][oO0][kK][iI1][eE3][mM][oO0][nN][sS][tT][eE3][rR].*
```


#### Import my recomendation for Yatqa
save Yatqa_banlist.txt
Login to your server / ban list / Import / open the downloaded file.
