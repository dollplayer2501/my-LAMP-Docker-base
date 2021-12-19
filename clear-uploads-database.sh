#!/bin/sh

\find ./mysql/database -type d | \grep -v -E './mysql/database$' | \xargs \rm -rf
\find ./mysql/database -type f | \grep -v -E './mysql/database/.gitkeep' | \xargs \rm -rf
