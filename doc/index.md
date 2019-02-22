# EAI documentation

#### Logic Entities:

- [Command](logic_entities/command.md) - can run **one** action. **Hard coded**
- Interpreter - can interpret text into processes or commands
- Process - cat call any commands. Calls are successive.
- Event - Creates when some process done or failed, or something important happens. can call another process
- Listener - Listen events and messages. Can run any process.
- Strategy - Has scripts for executing for any predicted situations (like event).
- Memento - Can store edge states and save it as **Snapshots**
- Proxy - Uses as middleware with Edges and Logic Entities.
- Composite - Can compose vertexes into graph structure.
- Iterator - Give a functional to access data collections

#### Session:

- AI context - store all entities what AI used for session
- User context - store simple data about user words.

#### Vertexes:

#### Edges:

- Can
- Number
- Has
- Creator
- HasAccess

