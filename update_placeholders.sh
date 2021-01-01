#!/bin/sh

updateReference() {
	read replacement;
	placeholder=$1;
	sed -i "s/$placeholder/$replacement/g" pages/*.html fragments/*.html;
}

echo "What is the product/project name?";
updateReference "\[PLACEHOLDER_PRODUCT\]";

echo "What is the product/project tagline/summary?";
updateReference "\[PLACEHOLDER_PRODUCT_TAGLINE\]";

echo "What is the name of your organization/company/project?";
updateReference "\[PLACEHOLDER_ORGANIZATION\]";

echo "What would you like the title suffix to be?";
updateReference "\[PLACEHOLDER_TITLE_SUFFIX\]";

echo "What year would you like for the copyright?";
updateReference "\[PLACEHOLDER_COPYRIGHT_YEAR\]";
