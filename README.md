# Guilds Project web UI

To keep this web dashboard as simple as possible, we've opted to use as little
packages, libraries and the like as possible. The flow of the page can be described
like this:
  - We use the Dotenv symfony component so you can safely store your DB credentials
  - We read those variables and open up a PDO connection to your database
  - Once we have your guilds data, we send it to a flat PHP template
  - We provide a .htaccess file to turn on pretty URls, but this is optional
 *
We hope you enjoy the dashboard!