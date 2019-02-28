## Table of contents

- [\Structural\Bridge\JsonOutput](#class-structuralbridgejsonoutput)
- [\Structural\Bridge\OutputBridge](#class-structuralbridgeoutputbridge)
- [\Structural\Bridge\OutputInterface (interface)](#interface-structuralbridgeoutputinterface)
- [\Structural\Bridge\StringOutput](#class-structuralbridgestringoutput)

<hr />

### Class: \Structural\Bridge\JsonOutput

> Class IntOutput

| Visibility | Function |
|:-----------|:---------|
| public | <strong>doSomething(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>string</em> |

*This class implements [\Structural\Bridge\OutputInterface](#interface-structuralbridgeoutputinterface)*

<hr />

### Class: \Structural\Bridge\OutputBridge

> Class OutputBridge

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed/[\Structural\Bridge\OutputInterface](#interface-structuralbridgeoutputinterface)</em> <strong>$output</strong>)</strong> : <em>void</em><br /><em>Service constructor.</em> |
| public | <strong>doSomething(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>void</em> |
| public | <strong>getOutput()</strong> : <em>[\Structural\Bridge\OutputInterface](#interface-structuralbridgeoutputinterface)</em> |

*This class implements [\Structural\Bridge\OutputInterface](#interface-structuralbridgeoutputinterface)*

<hr />

### Interface: \Structural\Bridge\OutputInterface

> Interface OutputInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>doSomething(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Structural\Bridge\StringOutput

> Class StringOutput

| Visibility | Function |
|:-----------|:---------|
| public | <strong>doSomething(</strong><em>string</em> <strong>$input</strong>)</strong> : <em>string</em> |

*This class implements [\Structural\Bridge\OutputInterface](#interface-structuralbridgeoutputinterface)*

