# Magento PostToTwitter Example

This is a magento extenstion created for the Magento ver. 1.9.3.1



**How to install** 

-- Create a new directory named "Dhimant" under app/code/local/    (e.g app/code/local/Dhimant/) 

-- Download or clone this repository within this directory

-- This is how should your path to module should look like app/code/local/Dhimant/PostToTwitter

-- You must also create Dhimant_PostToTwitter.xml under app/etc/modules

-- Paste the following content withing Dhimant_PostToTwitter.xml

```
	<?xml version="1.0" encoding="UTF-8"?>
	<config>
		<modules>
			<Dhimant_PostToTwitter>
				<active>true</active>
				<codePool>local</codePool>
			</Dhimant_PostToTwitter>
		</modules>
	</config>	
```

**Module settings** 

-- Module settings can be found under system -> configuration -> Twitter Module (On left sidebar) -> Settings