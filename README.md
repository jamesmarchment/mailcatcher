# mailcatcher
Workaround for a server-side data collection/archival function

Setting it up with just a basic login form, but eventually this is going to be a tool to receive data from a javascript document running somewhere like Squarespace that does not allow server-side code. Its purpose is to receive data with the Fetch API and then do whatever is needed with it -- I'm using it to write a CSV file, but it could be adapted to other purposes. 