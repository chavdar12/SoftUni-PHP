#!/bin/bash

# Check if the number of files to create is provided
if [ -z "$1" ]; then
  echo "Usage: $0 <number_of_files>"
  exit 1
fi

# Total number of files to create
total_files=$1

# Loop to create files
for i in $(seq -f "%03g" 1 $total_files); do
  filename="${i}.php"
  touch "$filename"
  echo "Created: $filename"
done

echo "Finished creating $total_files .php files."